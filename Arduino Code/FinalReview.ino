#include<SoftwareSerial.h>
#include <LiquidCrystal.h>
SoftwareSerial rfid(9,10);
SoftwareSerial gsm(11,12);
LiquidCrystal lcd(2,3,4,5,6,7);
int read_count=0,flag=0, j=0, k=0;
char data_temp, RFID_data[12];
int led = 13;
char inbyte = 0;
String rfid_val = "";
String disp = "",alloc="",nam="",bal="",cost="",mo="",comp="";
void setup() {
  Serial.begin(9600);
  rfid.begin(9600);
  gsm.begin(9600);
  lcd.begin(16,2);
  pinMode(led, OUTPUT);
  digitalWrite(led, LOW);
  lcd.print("Welcome!!");
}
void loop() {
  
  rfid.listen();
if(rfid.available())
{
RecieveData();
if(flag==1)
{

sendAndroidValues();
flag=0;  
}
}

  disp="";
  while (Serial.available()) {

    
 delay(50);          
 char charBTSerial = Serial.read();
 
    if (charBTSerial == 'x')
    continue;
    else if (charBTSerial == '#') 
    {
  break;
    }
        disp += charBTSerial;
        
  }
    
if (disp.length() == 1)
  {
    
    inbyte='\0';
    
    if (disp == "0")
    {
    
      digitalWrite(led, LOW);
    }
    if (disp == "1")
    {
    
      digitalWrite(led, HIGH);
    }
    disp="";
  }

  else if (disp.length() > 1){
  
  alloc="";
  mo="";
  nam="";
  bal="";
  cost="";
  comp="";
  comp+=disp[6];
  lcd.clear();
  Serial.println(comp);
  if(comp=="9"||comp=="8"||comp=="7")
  {
    mo=disp.substring(6,16);
    nam=disp.substring(16,20);
    bal=disp.substring(20,33);
    cost=disp.substring(33,40);
    //exit msg call
    MessageExit(nam,mo,cost,bal);
    lcd.print(cost);
    lcd.setCursor(0,1);
    lcd.print(bal);
  }
  else if(comp=="k")
  {
    lcd.print("No Free Slot");
  }
  else
  {
    nam=disp.substring(6,10);
    mo=disp.substring(10,20);
    alloc=disp.substring(21,24);
    lcd.print("Hello ");
    lcd.print(nam);
    lcd.setCursor(0,1);
    lcd.print("Park at ");
    lcd.print(alloc);
    //entry msg call
    MessageEntry(nam,mo,alloc);
  }
  Serial.println(disp);
  
  
  }
}


void sendAndroidValues()
 {
  PrintData();
}

void RecieveData()
{
if(rfid.available()>0)
{
data_temp=rfid.read();
RFID_data[read_count]=data_temp;
read_count++;
}
if(read_count==12)
{
  flag=1;
  read_count=0;
}

}
void PrintData()
{
    for(j=0;j<12;j++)
  {
    Serial.print(RFID_data[j]);
  }
  Serial.println();
}
void MessageEntry(String nam,String mo,String alloc)
{
  gsm.println("AT+CMGF=1");
  delay(1000);
  gsm.print("AT+CMGS=\"+91");
  gsm.print(mo);
  gsm.print("\"\r");
  delay(1000);
  gsm.print("Welcome ");
  gsm.println(nam);
  gsm.print("Please Park at ");
  gsm.println(alloc);
  delay(100);
   gsm.println((char)26);
  delay(1000);
}
void MessageExit(String nam,String mo,String cost,String bal)
{
  gsm.println("AT+CMGF=1");
  delay(1000);  
  gsm.print("AT+CMGS=\"+91");
  gsm.print(mo);
  gsm.print("\"\r");
  delay(1000);
  gsm.print("See you soon ");
  gsm.println(nam);
  gsm.println(". Visit Again");
  gsm.println(cost);
  gsm.println(bal);
  delay(100);
   gsm.println((char)26);
  delay(1000);
}

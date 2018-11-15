#include <SoftwareSerial.h> 
#include <dht.h>               
#include "MQ7.h"               

SoftwareSerial mySerial(7, 6);  
MQ7 mq7(A1,5.0);                
#define dht_apin A0            

int LEDPIN = 13;                

#define S1debug true
#define S_debug true

dht DHT;                       
double C2F;                     
int HI;                         
int AQ;                        
int sensorid = 1;               
int dataid = 1;                 
const char* un = "\"mang inasal\"";     
const char* pw = "\"12345678\"";  


void setup() 
{
    pinMode(LEDPIN, OUTPUT);                  
    Serial.begin(115200);                     
    mySerial.begin(115200);                   
    Serial.println("Connect to Wifi First");  
    SendData("AT+CWQAP",2000,S1debug);
    delay(1500);
    Serial.println("Connecting to wifi");
    SendData("AT+CWJAP="+ String(un) +","+ String(pw) +"",2000,S1debug);
    delay(1500);
}
 
void loop() 
{

  delay(1000);          
  SubmitHttpRequest();   
  delay(1000);          
 
}


void SubmitHttpRequest()
{

   DHT.read11(dht_apin);
   
   int h = DHT.humidity; 
   int t = DHT.temperature;

   C2F = t * 9 / 5 + 32;
   
   HI = -42.379 + 2.04901523*C2F + 10.14333127*h - .22475541*C2F*h - .00683783*C2F*C2F - .05481717*h*h + .00122874*C2F*C2F*h + .00085282*C2F*h*h - .00000199*C2F*C2F*h*h;
   AQ = mq7.getPPM();

   SendData("AT+CIPMUX=1",2000,S1debug);
   delay(1000);
 
   SendData("AT+CIPSTART=1,\"TCP\",\"192.168.43.74\",80",5000,S1debug);
   delay(1000);
 
   SendData("AT+CIPSEND=1,150",2000,S1debug);
   delay(1000); 

   SendData("GET /uhack18/uhack2018/hide.php?AQ="+ String(AQ) +"&THI="+ String(HI) +"&city=Albay HTTP/1.1\r\nHost: 192.168.43.74\r\nConnection: keep-alive\r\n\r\n\x1A",2000,S1debug);
   delay(3000); 

   SendData("AT+CIPCLOSE=1",2000,S1debug);
   delay(3000);
   
   if(HI >= 137 || AQ >= 300){
    Serial.println("Delayed for 30min");
   delay(1800000);
   }
}


void SendData(String command, const int timeout, boolean debug){
    String response = "";    
    mySerial.println(command); 
    delay(5);
    if(debug){
    long int time = millis();   
    while( (time+timeout) > millis()){
      while(mySerial.available()){       
        response += char(mySerial.read());
      }  
    }    
      Serial.print(response);
    }    
}



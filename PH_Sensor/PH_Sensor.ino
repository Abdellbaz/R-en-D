//YWROBOT
//Compatible with the Arduino IDE 1.0
//Library version:1.1
#include <Wire.h> 
#include <LiquidCrystal_I2C.h>

LiquidCrystal_I2C lcd(0x3F,16,2);  // set the LCD address to 0x27 for a 16 chars and 2 line display
int sensor_pin = A0;
float ph;
int output_value ;
void setup()
{
  lcd.init();   
  lcd.backlight();
 Serial.begin(9600);

   Serial.println("Reading From the Sensor ...");

   delay(2000);
}


void loop()
{
   output_value= analogRead(sensor_pin) * 0.004882814;
    ph = ((1.75 - output_value) / .25) + 7 ;
  // output_value = map(output_value,550,0,0,100);
  lcd.setCursor(0,0);
  lcd.print("Mositure :");
  lcd.print(ph);
  lcd.print('%');
   
 delay(200);
}

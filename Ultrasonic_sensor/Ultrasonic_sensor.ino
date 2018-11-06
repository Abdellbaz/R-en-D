
#define echoPin 12
#define trigPin 11
#define ledRed 2
#define ledYellow 3
#define ledGreen 4


long duration;
long distance;
 
void setup() {
  Serial.begin(9600);
  pinMode(echoPin, INPUT);
  pinMode(trigPin, OUTPUT);
  pinMode(ledYellow ,OUTPUT);
  pinMode(ledGreen,OUTPUT);
  pinMode(ledRed,OUTPUT);

  }
 
void loop() {
      
     
 
  digitalWrite(trigPin,LOW);
  delayMicroseconds(2);
  
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  
  digitalWrite(trigPin,LOW);
  
  duration = pulseIn(echoPin, HIGH);
  
  distance =duration/60;
  
  Serial.println(distance);
 
  delay(50);

  
  if(distance>0&&distance<20){ 
    digitalWrite(ledYellow, LOW);
    digitalWrite(ledRed, HIGH);
    digitalWrite(ledGreen, LOW);}
   else if(distance>25&&distance<45){ 
    digitalWrite(ledYellow,HIGH);
    digitalWrite(ledRed, LOW);
    digitalWrite(ledGreen, LOW);}
     else if(distance>50&&distance<70){ 
    digitalWrite(ledYellow,LOW);
    digitalWrite(ledRed, LOW);
    digitalWrite(ledGreen, HIGH);}
//    else{ digitalWrite(ledYellow, LOW);
//    digitalWrite(ledRed, LOW);
//    digitalWrite(ledGreen, LOW);}


}

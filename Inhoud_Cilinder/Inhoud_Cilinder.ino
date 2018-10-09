
float Diameter;
float Hooghte;       
float answer;

 
void setup() {Serial.begin(9600);}
 
void loop() {
  Serial.println("wat is de Diameter: ");
  do {while (!Serial.available()){} Diameter = Serial.parseFloat();} 
  while(!float(Diameter));
  
  Serial.println("wat is de Hooghte: ");
  do {while (!Serial.available()){} Hooghte = Serial.parseFloat();} 
  while(!float(Hooghte));

  Serial.println("");  
  Serial.print("Diameter : ");  Serial.println(Diameter);  
  Serial.print("Hooghte : ");   Serial.println(Hooghte);  
  Serial.print("Inhoud van cilinder : ");  Serial.println(Calc(Diameter,Hooghte));  
  Serial.println("---------------------------------------------------------------");}
  
  
float  Calc(float D,float H){
  answer = 3.14*(D/2)*(D/2)*H;
  return answer;}

#to calculate for sum
def add(x,y):
 return x+y

#to calculate for substract
def substract(x,y):
 return x-y

#to calculate for multiply
def multiply(x,y):
 return x*y

#to calculate for divide
def divide(x,y):
 return x/y

print("choose an operation: ")
print("1.add")
print("2.substract")
print("3.multiply")
print("4.divide")

while True:
 choice=(input("Enter your choice (1/2/3/4): "))
 if choice in ('1', '2', '3', '4'):
  
  num1=float(input("Enter your first number: "))
  num2=float(input("Enter your second number: "))
  if(choice=='1'):
   print(num1, "+", num2, "=", add(num1,num2))
  elif(choice=='2'):
   print(num1,"-",num2,"=",substract(num1,num2))
  elif(choice=='3'):
   print(num1,"x",num2,"=",multiply(num1, num2))
  elif(choice=='4'):
   print(num1,"/",num2,"=",divide(num1, num2))
          
  next_calculation=input("continue with calculation (yes/no): ")
  if next_calculation=="no":
   break
           
 else:
  print("invalid input")


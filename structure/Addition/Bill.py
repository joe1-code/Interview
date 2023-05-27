units=int(input("Enter your units for bill calculation:\n"))
#To pass if condition to check the correspondent units
if(units<=100):
    PayAmount=(100*1.5)
    FixedCharge=25
elif(units<=200):
    PayAmount=(100*1.5)+(units-100)*2.5
    FixedCharge=50
elif(units<=300):
    PayAmount=(100*1.5)+(200-100)*2.5+(units-200)*4
    FixedCharge=75
elif(units<=350):
    PayAmount=(100*1.5)+(200-100)*2.5+(300-200)*4+(units-300)*5
    FixedCharge=100

else:
    PayAmount=0
    FixedCharge=3000

Total=PayAmount+FixedCharge;
print("The Total amount is:",Total)
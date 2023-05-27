names=input("enter your names: ")
count1=0
count2=0

for i in names:
    if(i.islower()):
        count1=count1+1
    if(i.isupper()):
        count2=count2+1

print("The total number for lowercase is:",count1)
print("The total number for uppercase is:",count2)
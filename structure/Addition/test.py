names=input("enter your words: ")
count1=0
count2=0

for i in names:
    if(i.islower()):
        count1=count1+1
    if(i.isupper()):
        count2=count2+1

print("total lowercase: ",count1)
print("total uppercase: ",count2)

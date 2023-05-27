
ch = input("enter your character: \n")

if(ch=='A' or ch =='a' or ch=='E' or ch =='e' or ch =='I' or ch =='i' or ch =='O' or ch =='o' or ch =='U' or ch =='u' ):
 print("This is a vowel")

elif(ch.isnumeric()):
 print("This is a number")

else:
 print("This is a consonant")
# A program that takes in the marks and calculates the average grades

marks1 = int(input("Enter marks for maths:\n "))
marks2 = int(input("Enter marks for english:\n "))
marks3 = int(input("Enter marks for pysics:\n "))
marks4 = int(input("Enter marks for geography:\n "))

avg =(marks1+marks2+marks3+marks4)/4
print("Your average marks are: ",avg)

if(avg>=85):
 print("This is A grade: ",avg)
elif(60<=avg<84):
 print("This is grade B: ",avg)
elif(40<=avg<59):
 print("This is grade C: ",avg)
elif(30<=avg<39):
 print("This grade is D: ",avg)

else:
 print("This is grade F and you failed: ",avg)

#Enter your marks
marks1=int(input("Enter your marks:\n"))
marks2=int(input("Enter your marks:\n"))
marks3=int(input("Enter your marks:\n"))
marks4=int(input("Enter your marks:\n"))
marks5=int(input("Enter your marks:\n"))

# #Calculate your marks as average
# avg=(marks1+marks2+marks3+marks4+marks5)/5
# print("Your Average Marks is: ",avg)

# #To check the grades for an avg marks
# if(avg>=90):
#  print("You have grade A")
# elif(avg>=80&90):
#  print("You have grade B+")
# elif(avg>=70&80):
#  print("You have grade B-")
# elif(avg>=50&70):
#  print("You have grade C")
# elif(avg>=30&50):
#  print("You have grade D")
# elif(avg>=0&30):
#  print("You have grade F")

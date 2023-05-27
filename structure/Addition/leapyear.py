#Leap Year- Is the year which occurs after every 4 yrs and has 366 days of which february has 29 days.

year=int(input("Enter your year: "))
if(year%4==0 and year%100!=0 or year%400==0):
 print("The year is leap")
else:
 print("The year is not leap")
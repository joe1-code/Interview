import functools
#declare a variable that holds a value for total number of elements in an array.
number=int(input("enter a range for your elements: "))

#create/declare empty arrays.....I will them later on.
even=[]
odd=[]
#range for total inputs from one to final element according to a variable (number) above
for i in range(0, number):
 #enter elements in an array
 element=input("enter elements: ")
 #check elements for even and odd
 if(i%2==0):
  even.append(i)
 else:
  odd.append(i)


print(even)
print(odd)

#by using reduce function that iterates in each element in an array calculate sum of elements in even array
sumEven=functools.reduce(lambda a,b:a+b, even)
print("The total sum of even: ",sumEven)
#by using reduce function that iterates in each element in an array calculate sum of elements in odd array
sumOdd=functools.reduce(lambda a,b:a+b, odd)
print("The total sum of odd: ",sumOdd)
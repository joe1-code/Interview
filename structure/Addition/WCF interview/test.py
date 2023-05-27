import functools
#enter the elements into an array

elements = int((input("Enter the range: \n")))

arr=[]
even = []
odd = []

for i in range(elements):
 element = int(input("enter element:\n"))
 arr.append(element)
 print(arr)

 #separates the two odd and even arrays
 
 for i in arr:
  if(i%2 == 0):
   even.append(i)
   
   sumEven = functools.reduce(lambda a,b:a+b,even)

   print("The sum of even elements : ", sumEven)
  
  else:
   odd.append(i)
   sumOdd = functools.reduce(lambda a,b: a+b, odd)

   print("The sum of odd elements : ", sumOdd)
   


   

  #calculate for sum of odd and even numbers in their respective arrays
  

  
 

 
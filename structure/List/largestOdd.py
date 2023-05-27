import functools
a=[]

n = int(input("enter range of elements: \n"))

for i in range(n):
 el = int(input("enter elements: \n"))
 a.append((el))


even = []
odd = []

for i in a:
 if(i%2==0):
  even.append(i)

 else:
  odd.append(i)

# print(even)
# print(odd)

count1 = 0
count2 = 0
for k in even:
 count1 = count1 + 1

for j in odd:
 count2 = count2 + 1

print("largest Even: ",even[count1 - 1])
print("largest Odd: ",odd[count2-1])

#check for the sum of the elements in arrays
sumEven = functools.reduce(lambda a,b:a+b,even)
print("sum of even: ",sumEven)

sumOdd = functools.reduce(lambda a,b:a+b, odd)
print("sum of Odd: ", sumOdd)

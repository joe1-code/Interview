
#Check for missing number
def missingNumber(n):
 numbers=set(n)
 length=len(n)
 output=[]

 for i in range(1,n[-1]):
  if i not in numbers:
   output.append(i)
 return output

a=[1,4,5,6,8,11]
missing=missingNumber(a)
print(missing)
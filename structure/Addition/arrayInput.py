a=[]
n=int(input("the total input range: "))

for i in range(0,n):
  element=int(input("enter the elements: "))
  a.append(element)
      
b=[]
for i in a:
      b.append(i)
print(b)
print(len(b))
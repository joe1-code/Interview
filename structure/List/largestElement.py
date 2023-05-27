a=[]
n = int(input("enter the range of elements: "))

for i in range(0,n):
 ele = int(input("enter elements: "))
 a.append(ele)

a.sort()
print(a)
#largest element

print("largest Element: ",a[n-1])

#second largest element

print(" second largest element: ", a[n-2])
import functools

arr=[1,2,54,67,34,100,45]

#print the sum of elements
sum=functools.reduce(lambda a,b:a+b,arr)
print("the sum of elements is: ",sum)

#print the maximum element
large=functools.reduce(lambda a,b:a if a>b else b,arr)
print("the largest element is: ",large)

#smallest element in array
small=functools.reduce(lambda a,b:a if a<b else b,arr)
print("the smallest element is: ",small)

mult=functools.reduce(lambda a,b:a*b,arr)
print(mult)

k=[]
arr2=functools.reduce(lambda a,b:a if a<50 else print(k.append(b)),arr)
print(arr2)
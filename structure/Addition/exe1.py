import sys

x=5+6%5
print(x)

#Iteration
i=1
while True:
    if(i%3)==0:
        break
    print(i)

    i+= 1

#system version
#sys.Version(1)

#Bitwise Expression,a is done left shift by 3 then the result is read(converted) by it's binary number
a=3
print(a<<3)

#These ** are powers(2x9)
b=print(2**(3**2))
c=print((2**3)**2)
d=print(2**3**2)

#Truncation division operator(//)
e=20//3
print(e)

#Truncation division operator for only integers(/)
f=20/3
print(f)
g=10/2
print(g)

#List filter to return true/false values only
h=[1,2,0,5,0,'hello','w',[],'']
j=list(filter(bool,h))
print(j)

def func(x):
    def f(*args,**kwargs):
        print("sanfoundry")
        return x(*args,**kwargs)

    return f

k=min(max(False,-3,-4),2,7)
print(k)

#File format specifier
#"%.2f" checks for 2 decimal points
l="%.2f"%56.236
print(l)

print(len(["hello",1,2,3,4]))

#uppercase convert
x='abcd'
for i in x:
 print(i.upper())

#This reverses the list
 for i in [1,2,3,4][::-1]:
     print(i)

f=foo()
format(f)

def func1():
    z="ema"
    def func2():
        nonlocal z
        z="hello"
    func2()
    return z
print(func1())
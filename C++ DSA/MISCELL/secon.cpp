/*Write a C++ program that defines a complex class with:

Three constructors: a default constructor, one that initializes both real and imaginary parts to the same value, and one that initializes them differently.
A friend function sum to add two complex numbers and returns result.
A friend function show to display a complex number in the format x + jy.

In the main function, create three complex objects, calculate their sum, and display the results.*/


#include <iostream>
using namespace std;
class complex{
    int a,b;
    public:
        complex(){
            a=0;
            b=0;
        }
        complex(int a){
            this->a=a;
            b=a;
        }
        complex(int a,int b){
            this->a=a;
            this->b=b;
        }
        friend complex sum(complex x1,complex x2);
        friend void display(complex& x3);
};
complex sum(complex x1,complex x2){
    complex temp;
    temp.a=x2.a+x1.a;
    temp.b=x2.b+x1.b;
    return temp;
}
void display(complex& x3){
    cout<<x3.a<<" + i"<<x3.b<<endl;
}
int main(){
    complex c1(2),c2(3,4),c3(5,6),c4,c5;
    c4=sum(c1,c2);
    c5=sum(c4,c3);
    display(c5);
    return 0;
}
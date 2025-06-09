/*Define a class NUMBER with two private data member a and b and one public setdata() member function to read a and b.
Define another class MINIMUM with one public Min() member function to calculate the minimum of two numbers a and b (data member of class NUMBER. 
This min() function should return min value to the main function to print the minimum value between a and b.*/

#include <iostream>
using namespace std;
class number{
    int a,b;
    public:
        void setdata(int a,int b){
            this->a=a;
            this->b=b;
        }
        friend class minimum;
};
class minimum{
    public:
        void min(number& n1){
            if(n1.a>n1.b){
                cout<<"a is greater"<<endl;
            }
            else{
                cout<<"b is greater"<<endl;
            }
        }
};
int main(){
    number n1;
    n1.setdata(8,9);
    minimum m1;
    m1.min(n1);
    return 0;
}
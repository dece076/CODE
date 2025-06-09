/*Create a C++ program that demonstrates function overloading 
by defining area() functions to calculate the area of a circle and rectangle*/

#include <iostream>
using namespace std;
class area{
    float r,l,b;
    public:
        area(){
            r=l=b=0;
        }
        area(float r){
            this->r=r;
            cout<<"the area is: "<<(3.14*r*r)<<endl;
        }
        area(float l,float b){
            this->l=l;
            this->b=b;
            cout<<"the area is: "<<(l*b)<<endl;
        }
        
};
int main(){
    area ob(4.5);
    area on;
    area ob2(6.5,7.8);
    return 0;
}
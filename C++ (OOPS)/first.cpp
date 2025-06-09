/*binary +
unary -
post increment
pre increment
*/

#include <iostream>
using namespace std;
class boolean{
    int a,b;
    public:
        boolean(){

        }
        boolean(int a,int b){
            this->a=a;
            this->b=b;
        }
        void display(){
            cout<<a<<" + i"<<b<<endl;
        }
        friend void operator++(boolean& bs1,int);
        friend void operator-(boolean& bs2);
        friend boolean operator+(boolean x1,boolean x2);
};
void operator++(boolean& bs1,int){
    bs1.a++;
}
void operator-(boolean& bs2){
    bs2.a=-bs2.a;
}
boolean operator+(boolean x1,boolean x2){
    boolean temp;
    temp.a=x1.a+x2.a;
    temp.b=x1.b+x2.b;
    return temp;
}
int main(){
    boolean b1(8,9),b2(6,7),b3;
    b1++;
    b1.display();
    -b2;
    b2.display();
    b3=b1+b2;
    b3.display();
    return 0;
}
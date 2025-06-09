/*Develop a Boolean class that stores a boolean value.
Overload the logical NOT (!) operator to return the negation of the stored boolean value.*/

#include <iostream>
using namespace std;
class boolean{
    bool value;
    public:
        boolean(){

        }
        boolean(bool val){
            value=val;
        }
        bool operator!(){
            value=!value;
            return value;
        }
        void display(){
            cout<<"value is: "<<(value?"true":"false")<<endl;
        }
};
int main(){
    boolean b1(true),b2;
    b2=!b1;
    b2.display();
    return 0;
}
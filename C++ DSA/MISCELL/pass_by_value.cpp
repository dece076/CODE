
//here string s is getting modified inside the function but in the main function its content remains unchanged, this is cause because when a function is calles only the copy goes and not the original value
#include <iostream>
using namespace std;
void ok(string s){
    s[0]='t';
    cout<<s<<endl;
}
int main(){
    string s = "dinesh";
    ok(s);
    cout<<s<<endl;
    return 0;
}
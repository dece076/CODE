//lower case hashing
#include <iostream>
#include <map>
using namespace std;
int main(){
    int arr[4]={1,1,2,2};
    map <int,int> mp;
    for (int i=0;i<4;i++){
        mp[arr[i]]++;
    }
    cout<<mp[1];
}
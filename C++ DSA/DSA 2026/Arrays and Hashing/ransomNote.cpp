/*
Problem:
Given two strings ransomNote and magazine,
return true if ransomNote can be constructed
by using the letters from magazine.

Each letter in magazine can only be used once.

Example 1:
Input:
ransomNote = "a"
magazine = "b"

Output:
false

Example 2:
Input:
ransomNote = "aa"
magazine = "ab"

Output:
false

Example 3:
Input:
ransomNote = "aa"
magazine = "aab"

Output:
true
*/

#include <iostream>
#include <string>
#include <unordered_map>
using namespace std;

bool canConstruct(string ransomNote, string magazine) {
    unordered_map <char,int> mp;
    for (char ch : magazine){
        mp[ch]++;

    }
    for(char ch: ransomNote){
        if (mp.find(ch)!=mp.end()){
            mp[ch]--;
            if(mp[ch]<0){
                return false;
            }
        }
        else
            return false;   
    }
    return true;
}

int main() {
    string ransomNote = "aa";
    string magazine = "aab";

    cout << canConstruct(ransomNote, magazine) << endl;

    return 0;
}
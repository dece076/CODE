/*
Problem:
Given two strings s and t, return true if t is an anagram of s,
and false otherwise.

An Anagram is a word formed by rearranging the letters of another word,
using all the original letters exactly once.

Example 1:
Input: s = "anagram", t = "nagaram"
Output: true

Example 2:
Input: s = "rat", t = "car"
Output: false
*/

#include <iostream>
#include <string>
using namespace std;

bool isAnagram(string s, string t) {
    unordered_map<char,int> mp;
    for(char ch: s){
        mp[ch]++;
    }
    for(char ch:t){
        mp[ch]--;
    }
    for(auto it:mp){
        if(it.second!=0){
            return false;
            break;
        }
    }
    return true;


}

int main() {
    string s = "anagram";
    string t = "nagaram";

    cout << isAnagram(s, t) << endl;

    return 0;
}
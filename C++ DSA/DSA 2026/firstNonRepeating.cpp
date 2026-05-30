/*
Problem:
Given a string s, find the first non-repeating character in it
and return its index.

If it does not exist, return -1.

Example 1:
Input: s = "leetcode"
Output: 0

Explanation:
'l' appears only once and is the first unique character.

Example 2:
Input: s = "loveleetcode"
Output: 2

Explanation:
'v' is the first character that appears only once.

Example 3:
Input: s = "aabb"
Output: -1
*/

#include <iostream>
#include <string>
using namespace std;

int firstUniqChar(string s) {

    unordered_map<char,int> mp;
    for(char ch:s){
        mp[ch]++;
    }
    for(int i=0;i<s.size();i++){
        if (mp[s[i]]==1){
            return i;
        }
    }
    return -1;


}

int main() {
    string s = "leetcode";

    cout << firstUniqChar(s) << endl;

    return 0;
}
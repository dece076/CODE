/*
Question:
Given a string s,

find the length of the longest substring
without repeating characters.

A substring is a contiguous sequence of characters.

Example 1:
Input:
s = "abcabcbb"

Output:
3

Explanation:

The answer is:

"abc"

Length = 3

Example 2:
Input:
s = "bbbbb"

Output:
1

Explanation:

The answer is:

"b"

Length = 1

Example 3:
Input:
s = "pwwkew"

Output:
3

Explanation:

The answer is:

"wke"

Length = 3
*/

#include <iostream>
#include <string>
using namespace std;

int lengthOfLongestSubstring(string s) {
    unordered_map <char,int> mp;
    int l=0;
    int res=0;
    for(int r=0;r<s.size();r++){
        if(mp.find(s[r])!=mp.end()){
            l=max(l,mp[s[r]]+1);
        }
        mp[s[r]]=r;
        res=max(res,r-l+1);
    }
    return res;

}

int main() {

    string s = "abcabcbb";

    cout << lengthOfLongestSubstring(s);

    return 0;
}
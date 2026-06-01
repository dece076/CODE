/*
Question:
Given a string s, return true if it is a palindrome, otherwise return false.

A palindrome is a string that reads the same forward and backward.
It is case-insensitive and ignores all non-alphanumeric characters.

Note:
Alphanumeric characters consist of letters (A-Z, a-z) and numbers (0-9).

Example 1:
Input:
s = "A man, a plan, a canal: Panama"

Output:
true

Example 2:
Input:
s = "race a car"

Output:
false
*/

#include <iostream>
#include <string>
#include <cctype>
using namespace std;

bool isPalindrome(string s) {

    string c;

    for(char ch : s) {
        if(isalnum(ch)) {
            c.push_back(tolower(ch));
        }
    }

    int l = 0;
    int r = c.size() - 1;

    while(l < r) {

        if(c[l] == c[r]) {
            l++;
            r--;
        }
        else {
            return false;
        }
    }

    return true;
}

int main() {

    string s = "A man, a plan, a canal: Panama";

    if(isPalindrome(s))
        cout << "true" << endl;
    else
        cout << "false" << endl;

    return 0;
}
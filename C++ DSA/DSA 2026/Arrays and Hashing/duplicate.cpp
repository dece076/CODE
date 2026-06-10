/*
Problem:
Given an integer array nums, return true if any value appears at least twice in the array,
and return false if every element is distinct.

Example 1:
Input:  [1, 2, 3, 1]
Output: true

Example 2:
Input:  [1, 2, 3, 4]
Output: false

Explanation:
In Example 1, the number 1 appears twice.
*/

#include <iostream>
#include <vector>
#include <unordered_map>
using namespace std;

bool containsDuplicate(vector<int>& nums) {
    unordered_map <int,int> mp;
    for(int num:nums){
        mp[num]++;
        if(mp[num]>1){
            return true;
            break;
        }
    }
    return false;
}

int main() {
    vector<int> nums = {1, 2, 3, 1};

    cout << containsDuplicate(nums) << endl;

    return 0;
}
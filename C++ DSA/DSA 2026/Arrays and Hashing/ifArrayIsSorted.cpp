/*
Problem:
Given an array of integers nums, return true if the array is sorted in non-decreasing order,
otherwise return false.

Example:
Input:  [1,2,2,4,5]
Output: true

Input:  [1,3,2,4]
Output: false
*/

#include <iostream>
#include <vector>
using namespace std;

bool isSorted(vector<int>& nums) {
    bool flag=true;
    for(int i=0;i<nums.size()-1;i++){
        if (nums[i]>nums[i+1]){
            flag=false;
            break;
        }
    }
    return flag;

}

int main() {
    vector<int> nums = {1, 2, 2, 4, 5};

    cout << isSorted(nums) << endl;

    return 0;
}
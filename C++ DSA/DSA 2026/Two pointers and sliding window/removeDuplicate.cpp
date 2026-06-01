/*
Question:
Given an integer array nums sorted in non-decreasing order,
remove the duplicates in-place such that each unique element appears only once.

Return the number of unique elements.

Example 1:
Input:
nums = [1,1,2]

Output:
2

Example 2:
Input:
nums = [0,0,1,1,1,2,2,3,3,4]

Output:
5
*/

#include <iostream>
#include <vector>
using namespace std;

int removeDuplicates(vector<int>& nums) {

    int l=0;
    for(int i=1;i<nums.size();i++){
        if(nums[l]!=nums[i]){
            l++;
            nums[l]=nums[i];
        }
    }
    return l+1;

}

int main() {

    vector<int> nums = {0,0,1,1,1,2,2,3,3,4};

    cout << removeDuplicates(nums);

    return 0;
}
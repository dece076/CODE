/*
Problem:
Given an array of integers nums, return the second largest element in the array.

You may assume that the array contains at least 2 distinct elements.

Example:
Input:  [5, 1, 8, 3, 6]
Output: 6

Explanation:
The largest element is 8.
The second largest element is 6.
*/

#include <iostream>
#include <vector>
using namespace std;

int secondLargest(vector<int>& nums) {

    int max,min;
    if(nums[0]>nums[1]){
        max=nums[0];
        min=nums[1];
    }
    else{
        max=nums[1];
        min=nums[0];   
    }
    for (int num : nums){
        if (num>max){
            min=max;
            max=num;
        }
        else if (num>min&&num<max){
            min=num;
        }
    }
    return min;

}

int main() {
    vector<int> nums = {5, 1, 8, 3, 6};

    cout << secondLargest(nums) << endl;

    return 0;
}
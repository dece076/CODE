/*
Problem:
Given an array of integers nums, count how many even numbers are present.

Example:
Input:  [1, 2, 3, 4, 5, 6]
Output: 3

Explanation:
The even numbers are 2, 4, and 6.
*/

#include <iostream>
#include <vector>
using namespace std;

int countEven(vector<int>& nums) {
    int count=0;
    for (int i=0;i<nums.size();i++){
        if (nums[i]%2==0){
            count++;
        }
    }
    return count;

}

int main() {
    vector<int> nums = {1, 2, 3, 4, 5, 6};

    cout << countEven(nums) << endl;

    return 0;
}
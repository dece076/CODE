/*
Question:
Given an array nums consisting of n integers
and an integer k,

find the contiguous subarray of length k
that has the maximum average value.

Return the maximum average value.

Example 1:
Input:
nums = [1,12,-5,-6,50,3]
k = 4

Output:
12.75

Explanation:

Subarray = [12,-5,-6,50]

Sum = 51

Average = 51 / 4 = 12.75

Example 2:
Input:
nums = [5]

k = 1

Output:
5.0
*/

#include <iostream>
#include <vector>
using namespace std;

double findMaxAverage(vector<int>& nums, int k) {

    double avg=0;
    double sum=0;
    for(int i=0;i<nums.size();i++){
        if(i<k-1){
            sum+=nums[i];
        }
        else{
            sum=sum+nums[i];
            avg=max((double)sum/k,avg);
            sum-=nums[i-k];
        }
    }
    return avg;

}

int main() {

    vector<int> nums = {1,12,-5,-6,50,3};
    int k = 4;

    cout << findMaxAverage(nums, k);

    return 0;
}
/*
Question:
Given an integer array nums,
move all 0's to the end while maintaining
the relative order of the non-zero elements.

Example 1:
Input:
nums = [0,1,0,3,12]

Output:
[1,3,12,0,0]

Example 2:
Input:
nums = [0]

Output:
[0]
*/

#include <iostream>
#include <vector>
using namespace std;

void moveZeroes(vector<int>& nums) {

    int s=0;
    while(nums[s]!=0&&s<nums.size()){
        s++;
    }
    int f=s+1;
    for(int i=f;i<nums.size();i++){
        if(nums[i]!=0){
            nums[s]=nums[i];
            nums[i]=0;
            s++;
        }
    }
    for(int x : nums){
        cout << x << " ";
    }

}

int main() {

    vector<int> nums = {0,1,0,3,12};

    moveZeroes(nums);


    return 0;
}
#include <iostream>
#include <vector>
#include <unordered_map>
#include <string>

using namespace std;

/*
LeetCode 49. Group Anagrams

Given an array of strings, group the anagrams together.

Example:
Input:
["eat","tea","tan","ate","nat","bat"]

Output:
[
  ["eat","tea","ate"]
  ["tan","nat"]
  ["bat"]
]

Idea:
- Count frequency of all 26 letters.
- Convert the frequency array into a unique string key.
- Strings with the same key belong to the same group.

Time Complexity: O(n * k)
Space Complexity: O(n * k)
*/

class Solution {
public:
    vector<vector<string>> groupAnagrams(vector<string>& strs) {

        unordered_map<string, vector<string>> mp;

        for (const auto& s : strs) {

            // Frequency array
            vector<int> freq(26, 0);

            for (char c : s)
                freq[c - 'a']++;

            // Create unique key
            string key = "";

            for (int x : freq)
                key += "#" + to_string(x);

            // Store string
            mp[key].push_back(s);
        }

        // Store answer
        vector<vector<string>> ans;

        for (auto& it : mp)
            ans.push_back(it.second);

        return ans;
    }
};

int main() {

    vector<string> strs = {
        "eat", "tea", "tan", "ate", "nat", "bat"
    };

    Solution obj;

    vector<vector<string>> result = obj.groupAnagrams(strs);

    cout << "Grouped Anagrams:\n\n";

    for (auto& group : result) {

        cout << "[ ";

        for (auto& word : group)
            cout << word << " ";

        cout << "]\n";
    }

    return 0;
}
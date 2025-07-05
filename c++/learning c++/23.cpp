#include<iostream>
using namespace std;

class Example
{
    private:
    int x=10;
    public:
    void print()
    {
        cout<<"X is "<<x<<endl;
    }
};
class Exam : private Example
{

};

int main()
{
    Exam ob1;
   ob1.print();
};
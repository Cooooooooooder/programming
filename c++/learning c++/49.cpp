#include<iostream>
using namespace std;

class Count
{
    private:
        int x=0;
        int y=0;
        int z=0;

    public:
        Count() : x (8) , y (9) , z (2)
        {

        }
        void print()
        {
            cout<<"X is "<<x<<endl;            
            cout<<"Y is "<<y<<endl;            
            cout<<"X is "<<z<<endl;            
        }
};

int main()
{
    Count ob1;
    ob1.print();
}
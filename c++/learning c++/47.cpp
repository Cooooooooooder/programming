#include<iostream>
using namespace std;

class Cal
{
    private:
    int x=0;
    public:
    Cal()
    {
        cout<<"Enter X : ";
        cin>>x;
    }
    void operator -- ()
    {
        --x;
    }
    
    void operator -- (int)
    {
        x--;
    }
    void print()
    {
        cout<<"X after decreasement is : "<<x<<endl;
    }
};

int main()
{
    Cal ob1;
    ob1--;
    ob1.print();
    --ob1;
    ob1.print();



    return 0;
}
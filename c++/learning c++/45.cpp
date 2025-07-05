#include<iostream>
using namespace std;
static int c=1;

class Form
{
    private:
    int x=0;
    int y=0;
    public:
    Form()
    {
        cout<<"Enter x "<<c<<" : ";
        cin>>x;
        cout<<"Enter y "<<c<<" : ";
        cin>>y;
        c++;
    }
    void operator - (Form ob2)
    {
        cout<<x<<" + "<<ob2.y<<" = "<<x-ob2.y<<endl;
    }
};
int main()
{
    Form ob1;
    Form ob2;
    ob1 - ob2;


    return 0;
}

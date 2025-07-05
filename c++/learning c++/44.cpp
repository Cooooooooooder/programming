#include<iostream>
using namespace std;
static int c=1;

class Form
{
    private:
    string name = "unknown";
    public:
    Form()
    {
        cout<<"Enter the name "<<c<<" : "<<endl;
        cin>>name;
        c++;
    }
    void operator + (Form ob2)
    {
        cout<<name<<" "<<ob2.name<<endl;
    }
};
int main()
{
    Form ob1;
    Form ob2;
    ob1 + ob2;


    return 0;
}
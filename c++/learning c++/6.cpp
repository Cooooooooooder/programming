#include<iostream>
using namespace std;

class YouTube 
{
    public:
    string name;

    void print(YouTube x)
    {
        cout<<"name is : "<<name<<endl;
    }
    void set(YouTube x)
    {
        cout<<"name is : "<<x.name<<endl;
    }

};

int main()
{
    YouTube ob1;
    YouTube ob2;
    ob1.name="Mr.robot";
    ob2.name="Capten America";

    ob2.print(ob1);  //Capten America
    ob2.set(ob2);    //Capten America

    return 0;
}
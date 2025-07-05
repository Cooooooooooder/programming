#include<iostream>
using namespace std;

//overloading function

class School
{
    private:
    string name;
    int level;
    int id;

    public:
    void set(string n, int l);
    void set(int i);
};

 void School::set(string n, int l)
    {
        name=n;
        level=l;
        cout<<"The name is : " <<name<<endl;
        cout<<"The level is : " <<level<<endl;


    }

    void School::set(int i)
    {
        id = i;
        cout<<"The id is : " <<id<<endl;
        
    }

int main()
{
    School ob1;
    ob1.set(79);
    ob1.set("haha" , 3);
    
    return 0;
}
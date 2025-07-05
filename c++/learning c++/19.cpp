#include<iostream>
using namespace std;

class Student
{
    private:
    string name;
    int mark;
    public:
    Student(string n, int m)
    {
        name = n;
        mark = m;
    }
    Student()
    {
        cout<<"Enter the name : "<<endl;
        cin>>name;
        cout<<"Enter the mark : "<<endl;
        cin>>mark;

        
    }
    friend void sum(Student ob1,Student ob2,Student ob3);
    void checkmarks(Student ob1,Student ob2,Student ob3)
    {
        if (ob1.mark>ob2.mark&&ob1.mark>ob3.mark)
        {cout<<ob1.name<<"!  "<<"Congratulations !  You are the better"<<endl;}
        else if (ob2.mark>ob1.mark&&ob2.mark>ob3.mark)
        {cout<<ob2.name<<"!  "<<"Congratulations !  You are the better"<<endl;}
        else if (ob3.mark>ob1.mark&&ob3.mark>ob2.mark)
        {cout<<ob3.name<<"!  "<<"Congratulations !  You are the better"<<endl;}
        else 
        {cout<<"The three are equel! "<<endl;}
        
    }

};
void sum(Student ob1,Student ob2,Student ob3)
{
    int sum = ob1.mark+ob2.mark+ob3.mark;
    cout<<"The sum is : "<<sum<<endl;
}

int main()
{
    // Student ob1("Ahmed" , 20);
    // Student ob2("Ali" , 40);
    // Student ob3("Nour" , 60);
    // ob1.checkmarks(ob1,ob2,ob3);
    // sum(ob1,ob2,ob3);

    Student ob1;
    Student ob2;
    Student ob3;

    ob1.checkmarks(ob1,ob2,ob3);
    sum(ob1,ob2,ob3);
    

}
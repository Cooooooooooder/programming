#include <iostream>
using namespace std;

// ---------Variables------------
double balance = 1000;
int withdrow = 0;
int deposit = 0;
int password = 1234;
int choice = 0;
char optionOfYesOrNo = 'o';

// -------- Display the menue
void show_intro()
{
    cout << "----- MENUE -----" << endl;
    cout << "1: Balance " << endl;
    cout << "2: Withdrow " << endl;
    cout << "3: Deposit " << endl;
    cout << "4: Exit " << endl;
    cout << "****************" << endl;
}

void Process()
{
    cout << "Enter Your password : ";
    cin >> password;
    do
    {
        if (password == 1234)
        {
            cout << "Enter Your Choice : ";
            cin >> choice;

            switch (choice)
            {
            case 1:
                cout << "Your balance is :" << balance << endl;
                break;

            case 2:
                cout << "Note! Your balance is :" << balance << endl;
                cout << "Enter your amount : ";
                cin >> withdrow;

                if (withdrow > balance)
                {
                    cout << "Sory! you can't withdrow more than : " << balance << endl;
                }
                else
                {
                    balance = balance - withdrow;
                    cout << "Your balance Now is :" << balance << endl;
                }
                break;

            case 3:
                cout << "Your balance is :" << balance << endl;
                cout << "Enter your deposit : ";
                cin >> deposit;
                balance += deposit;
                cout << "Your balance Now is :" << balance << endl;
                break;

            case 4:
                cout << "Thank You . " << endl;
                break;
            }//end of switch
        }//end of if
        else
        {   
            cout<<"Sory! Your password is wrong . "<<endl;
            cout<<"Enter Y if you want to repeat : "<<endl;
            cout<<"Enter N if you want to Exit : "<<endl;
            cin>>optionOfYesOrNo;
            if(optionOfYesOrNo == 'Y' || optionOfYesOrNo =='y')
            {
            Process();
            }
            else
            {
                choice = 4;
            }
        }
    } while (choice < 4);
}// end of process()

int main()
{
    show_intro();
    Process();
}
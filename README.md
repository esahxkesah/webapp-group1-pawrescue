# Group 1 (PawRescue)


| Name                                                              |  Matric No    |
| -------------                                                     | ------------- |
| SITI AISYAH BINTI ISMAIL                                          |   2010912     |
| NABILAH HAKIM BINTI NAZRI                                         |   2013672     |
| NUR SYAFINI BINTI ISMAIL                                          |   2018028     |
| NUR SARAH NAJIHAH BINTI ZULKAFLI                                  |   2013650     |


# PawRescue Website Application

## Introduction


## Objective

## Features & Functionalities

There will be 2 users for our website:
1. Members
2. Staff

Members
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for members will be created using jetstream, where members can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Homepage                         |The first page that visitors see when they load our URL. Members can only view all the information on the homepage, they cannot add or customize any articles, videos and etc.|
| Adoption                         |Members can only view and fill in the adoption form on this page if they want to adopt a pet.|
| Events                           |Members can only view and fill in the event form on this page if they want to participate in the event.|
| Reports                          |Members can only view and fill in the report form on this page if they want to make a report.|

Staff
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for staff will be created using jetstream, where staff can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Homepage                         |The first page that visitors see when they load our URL. Staff can customize the homepage with variety of articles, videos and etc.|
| Adoption                         |Staff can customize the adoption page by create, read, update, and delete any data on the adoption list.|
| Events                           |Staff can customize the event page by create, read, update, and delete any data on the event list.|
| Reports                          |Staff can customize the report page by create, read, update, and delete any data on the report list.|

## ERD Diagram & Relationship
![Entity Relationship Diagram ](https://user-images.githubusercontent.com/83501001/209619423-bd660844-5f9e-437d-8894-933ad1e96635.png)


### In the database system, we have 5 tables which are:
1. Account
2. Participation
3. Report
4. Adoption
5. Event
6. Pet

### The relationship between each entity
1) Account and Participation : an Account can have zero or many Participations and one Participation must only belong to one Account 
2) Account and Report : an Account can make zero or many Reports and one Report must only belong to one Account
3) Account and Adoption : an Account can have zero or many Adoptions and one Adoption must only belong to one Account
4) Participation and Event : a Participation must only belong to one Event and Event can have zero or many Participations
5) Adoption and Pet : an Adoption must only have one Pet and a Pet can have zero or only one Adoption


## Sequence Diagram
### Member Role
![Sequence diagram - Copy of Sequence diagram (1)](https://user-images.githubusercontent.com/68623558/209470668-4966014a-c821-47fa-a266-4a8131fb9f9a.png)

### Staff Role
![Sequence diagram - Copy of Copy of Sequence diagram (1)](https://user-images.githubusercontent.com/68623558/209470671-96c464c9-0c59-4058-b3d8-8312bb94951a.png)


## References

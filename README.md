# Group 1 (PawRescue)


| Name                                                              |  Matric No    |
| -------------                                                     | ------------- |
| SITI AISYAH BINTI ISMAIL                                          |   2010912     |
| NABILAH HAKIM BINTI NAZRI                                         |   2013672     |
| NUR SYAFINI BINTI ISMAIL                                          |   2018028     |
| NUR SARAH NAJIHAH BINTI ZULKAFLI                                  |   2013650     |


# PawRescue Website Application

## Table of Contents
<ol>
  <li>Introduction</li>
  <li>Objective</li>
  <li>Features & Functionalities</li>
  <li>ERD Diagram & Relationship</li>
  <li>Sequence Diagram</li>
  <li>References</li>
</ol>

## Introduction

In our country, Malaysian citizens must at least once see a quite number of cats and dogs roaming around looking so smudged and pitiful on the street when we are outside, especially at the outdoor restaurant, park, neighborhood and so on. They are considered and called stray animals that can include lost animals that were unable to find their way home, street animals that are born and breed on the streets and have never been owned, or abandoned animals that are no longer desired and are left on the streets or brought to a shelter by their owner. Stray animals are not limited to just cats and dogs but it also can be an exotic pet like fennec fox and hedgehog that stray around without observation. Reproduction among stray animals that gets out of hand can raise their number and will cause a lot of complications which increases the likelihood of predation, auto accidents, the spread of zoonotic illnesses, and hence, their potential to serve as disease vectors. 

One of our proposed approaches is by making an web application to help, save, protect the animals and the environment which is called PawRescue. PawRescue web application will work together with animal shelters to help stray animals to get treated, to get helped and to get protected. This web application also is going to have some user-friendly features and information that everybody can use. We are gonna post and update the upcoming events concerning the stray animals’ welfare aside from adoption and volunteer feature and our rescued pets information. For the adopt feature, users can adopt animals that they find adorable for free by using their registered account which can also be made for free. The event feature will be prepared for those who voluntarily want to take part in our operation officially. Other than that, users can also make a report on any concerning animals that need help that they witness.


## Objective

The objective of PawRescue web application project is to create a better community which includes the environment and animals through application technology and to gather voluntary society who are in for the better sake of stray animals in our society.

## Features & Functionalities

There will be 3 type of users for our website:
1. Guest or public user
2. Registered User
3. Staff

### Guest
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Homepage                         |The first page that visitors see when they load our URL. Guest can only view all the information on the homepage.|
| Adoption                         |Guest can only view the list of open adoptions and the details of every pet.|
| Events                           |Guest can only view the list of available events and details of every event.|
| Donate                           |Guest can fill up the form to donate on this page.|

### Registered User
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for registered user will be created using jetstream, where members can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Homepage                         |The first page that visitors see when they load our URL. Registered users can only view all the information on the homepage.|
| Adoption                         |Registered user can only view the list of open adoptions and the details and choose a pet to adopt on this page.|
| Events                           |Registered user can only view the list of available events and the details and choose an event to participate on this page.|
| Reports                          |Registered user can only view and fill in the report form on this page if they want to make a report.|
| Donate                           |Registered user can fill up the form to donate on this page.|

### Staff
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for staff will be created using jetstream, where staff can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Adoption                         |Staff can customize the adoption page by creating new adoption and insert new adoption on the adopt page.|
| Events                           |Staff can customize the event page by creating new event and insert new even on the adopt page.|
| Reports                          |Staff can view all reports submitted by the registered users.|

## ERD Diagram & Relationship
![Entity Relationship Diagram](https://user-images.githubusercontent.com/68623558/214100575-d0bbd180-4d87-4455-b0a6-6c5a73cd9140.png)



### In the database system, we have 6 tables which are:
1. Account
2. Participation
3. Report
4. Adoption
5. Event
6. Pet
7. Donate (no relationships with other tables)

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

## Project System Captured
### Login
![Screenshot_20230124_033556](https://user-images.githubusercontent.com/83501001/214135722-b20adde0-d108-4514-9912-b18b8302bc68.png)

### Homepage
#### Guest
![Screenshot_20230124_033112](https://user-images.githubusercontent.com/83501001/214133635-d3b1ad45-c32f-454c-a68d-860ae9008908.png)

#### Logged in
![Screenshot_20230124_033658](https://user-images.githubusercontent.com/83501001/214133746-9d0a386f-3848-4622-81a4-dcfa848d29a8.png)

### Adopt
#### View Adoption list
![Screenshot_20230124_033325](https://user-images.githubusercontent.com/83501001/214133813-c2711f78-895a-4c5e-be85-8dc2c23e8724.png)
![Screenshot_20230124_034220](https://user-images.githubusercontent.com/83501001/214134312-60fbfeb1-b420-461a-9e43-4a24c989d27e.png)

#### Add Pet (as logged in admin)
![Screenshot_20230124_034136](https://user-images.githubusercontent.com/83501001/214134198-db1d154a-13b8-48ff-84ff-81198469d7b6.png)

### Report
#### View Report list
![image](https://user-images.githubusercontent.com/83501001/214134666-03578e11-909b-4010-b65e-60bfff40892a.png)

#### Add report
![Screenshot_20230124_033346](https://user-images.githubusercontent.com/83501001/214134425-7001ffaa-60f7-4c6f-875f-6e8607954392.png)

### Event
#### View Event list
![Screenshot_20230124_033456](https://user-images.githubusercontent.com/83501001/214134964-7e430097-a714-47cb-bf0e-8aa3fb0e3fce.png)
![image](https://user-images.githubusercontent.com/83501001/214135295-c2ab2388-482e-48d4-8a4b-9693c3c362b5.png)


#### Add event
![Screenshot_20230124_034649](https://user-images.githubusercontent.com/83501001/214135191-2d0a0f28-405e-400e-a675-1a275c262d42.png)

### Donate
![Screenshot_20230124_033544](https://user-images.githubusercontent.com/83501001/214135470-9c40a47b-2a55-4401-9a24-c79bfa514675.png)

### Profile
![Screenshot_20230124_033634](https://user-images.githubusercontent.com/83501001/214135632-b03c34dc-5aba-49dc-b7de-06d9c407e7b2.png)

## Challenges & Difficutlties 
### 1) Figuring out out how to use GitHub so that the work can be compiled.
Github is a new platform for us to use as a student. We had never done a collaboration for a coding project especially for web application thus the challenges of using github rised. Setting up at first for each of the member in the group was hard. There are several ways to collaborate but one of the key step is to clone the github project. 
### 2) Separating the page for staff and members.
We were only taught about Jetsream about its setup and installation. Therefore, configuring the Jetstream usage onto the laravel project was tough. There are more things to discover about the usage of Jestream for the authentication purpose.
### 3) To choose a time when every member is available for a meeting.
Since we are a full time student, there are other subjects than web application to handle and focus on.Hence, we hardly could set a time for all of us to code together most of the times. Lack of teamwork, made the project unmotivated and less coordination. 

## References

<ol>
  <li>UML sequence diagram tutorial. Lucidchart. (n.d.). Retrieved December 28, 2022, from https://www.lucidchart.com/pages/uml-sequence-diagram </li>
  <li>What is an entity relationship diagram (ERD)? Lucidchart. (n.d.). Retrieved December 28, 2022, from https://www.lucidchart.com/pages/er-diagrams </li>
</ol>



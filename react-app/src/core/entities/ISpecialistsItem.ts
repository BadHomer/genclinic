export interface ISpecialistsItem {
    id : number,
    name: string,
    speciality: string,
    educations: Array<IEducation>,
    workExperience: number,
    photoPath: string
}

interface IEducation {
    name: string,
    speciality: string,
}

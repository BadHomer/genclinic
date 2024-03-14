import tempImg from "@/assets/images/indexPage/news-temp.jpg";
import {ISpecialistsItem} from "@/core/entities/ISpecialistsItem";



export function SpecialistsPageCard(props: { specialist: ISpecialistsItem }) {
    const specialist = props.specialist;
    return (
        <>
            <div className='specialists-card'>
                <div className='specialists-card-infos'>
                    <div>
                        <div className='specialists-card-infos-name-spec'>
                            <h2>{specialist.name}</h2>
                            <p>{specialist.specialization}</p>
                        </div>

                        <div className='specialists-card-infos-container'>
                            <h3>Образование:</h3>
                            <div  className={'specialists-card-infos-education-texts'}>
                                {specialist.educations.map(
                                    education => <p>{education}</p>
                                )}
                            </div>
                        </div>
                        <div className='specialists-card-infos-container'>
                            <h3>Стаж:</h3>
                            <p>{specialist.workExperience}</p>
                        </div>
                    </div>
                    <button className='primary-btn specialists-card-infos-btn'>Записаться на прием</button>
                </div>
                <img src={specialist.photoPath ? specialist.photoPath : tempImg}/>
            </div>
        </>
    );
}

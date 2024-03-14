
import '@/styles/pages/specialists.scss';
import {specialists} from '@/mokData/specs';
import {SpecialistsPageCard} from "@/components/specialists/SpecialistsPageCard";
export function SpecialistsPage() {
    return (
        <>
            <h1 className='page-title'>Специалисты</h1>
            <section className='specialists'>

            <div className='specialists-container'>
                {specialists.map(
                    spec => <SpecialistsPageCard specialist={spec}/>
                )}
            </div>
        </section>
        </>
    );
}

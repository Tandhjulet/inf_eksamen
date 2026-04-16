export type Appearance = 'light' | 'dark' | 'system';
export type ResolvedAppearance = 'light' | 'dark';

export type AppVariant = 'header' | 'sidebar';

export interface IFAQCard {
    title: string;
    picture: string;
}

export interface Party {
    id: number;
    name: string;
    icon: string;
    descriptor: string;
    created_at: string;
    updated_at: string;
    candidates: Candidate[];
}

export interface Candidate {
    id: number;
    name: string;
    party_id: number;
    district_id: number;
    created_at: string;
    updated_at: string;

    district: District;
}

export interface District {
    id: number;
    name: string;
    created_at: string;
    updated_at: string;
}
